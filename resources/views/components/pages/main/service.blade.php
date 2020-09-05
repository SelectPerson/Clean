
<div class="row">
  @foreach($generalclean as $generalclean_elem)
    <div class="col s12 m4 service__img">
      <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="/{{ $generalclean_elem->location_img }}">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">{{ $generalclean_elem->title }}</span>
          <p>
              <span class="activator grey-text text-darken-4">Від 30 грн.м2</span>
                
              <i class="material-icons right">navigate_next</i>
          </p>
        </div>
        <div class="card-reveal">
          <i class="material-icons right card-title grey-text text-darken-4"">close</i>
          <span class="card-title grey-text text-darken-4">{{ $generalclean_elem->title }}

          </span>
          <p>{{ $generalclean_elem->about }}</p>
        </div>
        <a href="#" class="order-clean">Замовити</a>
      </div>
    </div>
  @endforeach

</div>

<style>
  .order-clean {
    text-align: center;
    display: block;
    background-color: #00923F;
    color: #F6FAF7;
    font-weight: bold;
    letter-spacing: 1px;
    font-size: 18px;
    padding: 6px 0;
  }
</style>