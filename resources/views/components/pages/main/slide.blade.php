@section('slider_link')
  <link rel="stylesheet" href="js/slider/BeerSlider.css">
@endsection
<div class="ba-slider">
  <img src="http://egegorgulu.com/assets/img/beforeafter/after.jpg" alt="">       
  <div class="resize">
    <img src="http://egegorgulu.com/assets/img/beforeafter/before.jpg" alt="">
  </div>
  <span class="handle"></span>
</div>
@section('slider_script')
  <script>
    // Call & init
$(document).ready(function(){
  $('.ba-slider').each(function(){
    var cur = $(this);
    // Adjust the slider
    var width = cur.width()+'px';
    cur.find('.resize img').css('width', width);
    // Bind dragging events
    drags(cur.find('.handle'), cur.find('.resize'), cur);
  });
});

// Update sliders on resize. 
// Because we all do this: i.imgur.com/YkbaV.gif
$(window).resize(function(){
  $('.ba-slider').each(function(){
    var cur = $(this);
    var width = cur.width()+'px';
    cur.find('.resize img').css('width', width);
  });
});

function drags(dragElement, resizeElement, container) {
	
  // Initialize the dragging event on mousedown.
  dragElement.on('mousedown touchstart', function(e) {
    
    dragElement.addClass('draggable');
    resizeElement.addClass('resizable');
    
    // Check if it's a mouse or touch event and pass along the correct value
    var startX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;
    
    // Get the initial position
    var dragWidth = dragElement.outerWidth(),
        posX = dragElement.offset().left + dragWidth - startX,
        containerOffset = container.offset().left,
        containerWidth = container.outerWidth();
 
    // Set limits
    minLeft = containerOffset + 10;
    maxLeft = containerOffset + containerWidth - dragWidth - 10;
    
    // Calculate the dragging distance on mousemove.
    dragElement.parents().on("mousemove touchmove", function(e) {
    	
      // Check if it's a mouse or touch event and pass along the correct value
      var moveX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;
      
      leftValue = moveX + posX - dragWidth;
      
      // Prevent going off limits
      if ( leftValue < minLeft) {
        leftValue = minLeft;
      } else if (leftValue > maxLeft) {
        leftValue = maxLeft;
      }
      
      // Translate the handle's left value to masked divs width.
      widthValue = (leftValue + dragWidth/2 - containerOffset)*100/containerWidth+'%';
      // console.log(widthValue.slice(0,-1));
			if(widthValue.slice(0,-1) < 5.4) {
        widthValue = '0.0%'
      }
      if(widthValue.slice(0,-1) > 94.4) {
        widthValue = '100.0%'
      }
      
      // Set the new values for the slider and the handle. 
      // Bind mouseup events to stop dragging.
      $('.draggable').css('left', widthValue).on('mouseup touchend touchcancel', function () {
        $(this).removeClass('draggable');
        resizeElement.removeClass('resizable');
      });
      $('.resizable').css('width', widthValue);
    }).on('mouseup touchend touchcancel', function(){
      dragElement.removeClass('draggable');
      resizeElement.removeClass('resizable');
    });
    e.preventDefault();
  }).on('mouseup touchend touchcancel', function(e){
    dragElement.removeClass('draggable');
    resizeElement.removeClass('resizable');
  });
}

  </script>
@endsection

<style>
  
  .ba-slider {
    position: relative;
    overflow: hidden;
    margin: 0 auto;
    width: 96%;
    height: 300px;;
}
 
.ba-slider img {
    width: 100%;
    display:block;
}
 
.resize {
    position: absolute;
    top:0;
    left: 0;
    height: 100%;
    width: 50%;
    overflow: hidden;
}


.handle { /* Thin line seperator */
  position:absolute; 
  left:50%;
  top:0;
  bottom:0;
  width:4px;
  margin-left:-2px;
 
  background: rgba(0,0,0,.5);
  cursor: ew-resize;
}


 
/* .handle:after {  
    position: absolute;
    top: 50%;
    width: 64px;
    height: 64px;
    margin: -32px 0 0 -32px;
 
    content:'\21d4';
    color:white;
    font-weight:bold;
    font-size:36px;
    text-align:center;
    line-height:64px;
 
    background: #ffb800;
    border:1px solid #e6a600; 
    border-radius: 50%;
    transition:all 0.3s ease;
    box-shadow:
      0 2px 6px rgba(0,0,0,.3), 
      inset 0 2px 0 rgba(255,255,255,.5),
      inset 0 60px 50px -30px #ffd466;  
}

.draggable:after {
    width: 48px;
    height: 48px;
    margin: -24px 0 0 -24px;
    line-height:48px;
    font-size:30px;
} */
</style>