<?php
include('header.php')
?>
    <form  method="post" >
        <div class="row container mx-auto pt-5">
            <div class="col-3">
            <select class="form-select"  name="state-number" id="state_number">
        <?php 
        foreach($unique_nrc as $nrc ):
        ?>
        <option value="<?= $nrc  ?>"> <?= $nrc ?> </option>
        <?php 
        endforeach;
        ?>
    </select>
            </div>
            <div class="col-3">
            <select class="form-select"  name="town_ship" id="town_ship">
                <option value="" selected>Township</option>
            </select>
            </div>
            <div class="col-3">  
    <div class=" ">
    <div class="form-check">

    <label class="form-check-label" for="N">N</label>
        <input class="form-check-input"  type="radio" value="nd nr" name="type" id="N">
    </div>
    <div class="form-check">
    <label class="form-label" for="N">A</label>
        <input  class="form-check-input" type="radio" value="a" name="type" id="A">
    </div>
       
    <div class="form-check">
    <label class="form-label"  for="N">P</label>
        <input  class="form-check-input" type="radio" value="p" name="type" id="P">
    </div>
       
    </div>

            </div>
            <div class="col-3">
            <label class="form-label" for="number">Number</label>

<input  type="text" name="number"  id="number">
            </div>
        </div>
  
        <div class=" mx-auto text-center mt-5">
    <button class=" btn btn-primary">
        Submit
    </button>
   </div>
   
    
    </form>
<?
include('footer.php')
?>