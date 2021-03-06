<?php if (isset($element['id'])): ?>
<div class="modal" id=<?php echo "newDonationM".$element['id'] ?>>
    <?php else: ?>
<div class="modal" id="newDonationM" ?>>
<?php endif ?>
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">
                    Nueva Donación                     
                    <?php if (isset($element['nombre'])):
                         echo $element['nombre'] ?>
                    <?php else: ?>
                           <select name="id_fundacion">
                           <?php foreach (Fundacion::fundaciones() as $element): ?>
                               <option value="<?php echo $element['id'] ?>"> 
                                <?php echo $element['nombre'] ?> </option>
                            </select> 
                    <?php endforeach ?>
                     <?php endif ?>
                </h3>
                <button class="close" data-dismiss="modal" type="button">
                    x
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="valores">
                    <div class="form-group">
                        <label>
                            <h4>
                                ¿Cuánto quieres donar?
                            </h4>
                        </label>
                        <br>
                            <div aria-label="Basic example" class="btn-group values" role="group">
                                <button class="btn btn-sample active selectvalue" type="button">
                                    5000
                                </button>
                                <button class="btn btn-sample selectvalue" type="button">
                                    10000
                                </button>
                                <button class="btn btn-sample selectvalue" type="button">
                                    20000
                                </button>
                                <button class="btn btn-sample selectvalue" type="button">
                                    50000
                                </button>
                                <button class="btn btn-sample customvalue" type="button">
                                    Otra cantidad
                                </button>
                            </div>
                            <div class="input-group customam" style="display: none; margin-top:10px;">
                                <span class="input-group-addon" id="basic-addon1">
                                    $
                                </span>
                                <input aria-describedby="basic-addon1" class="form-control" id="custom" placeholder="Otra cantidad" type="number">
                                </input>
                            </div>
                        </br>
                    </div>
                </div>
                <br>
                    <div class="money-donate">
                        <span id="displayAmount">
                            <h2>
                                <span id="sign">
                                    $
                                </span>
                                <span id="stripeAmount">
                                    5000
                                </span>
                            </h2>
                        </span>
                    </div>
                    <div class="info-box">
                        Muchas gracias por participar en esta campaÃ±a
                    </div>
                </br>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <form>
                    <button class="btn btn-primary" id="stripeButton" style="width: 100%;">
                        Continuar con la donación
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

