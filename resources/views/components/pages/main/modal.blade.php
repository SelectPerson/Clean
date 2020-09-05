<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content"> 
    <h4>Замовити послугу</h4>
    <div class="row">
      <p>Введіть ваші дані, або зателефонуйте нам:</p>
        <br/>
      <p>+38050505005</p>

      <form class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <input id="input_name" type="text" data-length="10">
            <label for="input_name">Ваше ім'я</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="input_text" type="tel" data-length="10">
            <label for="input_text">Ваш номер</label>
          </div>
        </div>
      </form>
     
    </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat col s12 order-modal">Замовити</a>
  </div>
</div>

<style>
  #modal1 {
    outline: 0;
  }
  .modal-footer {
    width: 100%;
    height: 60px;
    
    background-color: #00923f !important;
  }
  .order-modal {
    text-align: center;
    color: white;
    margin: 0 auto;
    display: block;
  }
</style>