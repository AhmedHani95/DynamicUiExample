<?php

/* @var $this yii\web\View */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'My Yii Application';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script>
 	$(document).ready(function(){
 		var button=$("#addKey");
 		$(button).click(function(e){
 			e.preventDefault();
   			$(".after-add-more").append("<div class='inner'><div style='margin:5px;'><input type='text' name='input[]' class='form-control'></div><div style='margin:5px;'><input type='text' name='input[]' class='form-control'></div><div style='margin:5px;'><input type='text' name='input[]' class='form-control'></div><button style='margin:5px;' onclick='removeBlock(this)' class='btn btn-danger'>Remove</button></div>");
 		});

 		$("#getValues").click(function(){
 			var actualInputSize=0;
 			var elements = document.getElementById("myForm").elements;
 			var formSize=elements.length;
			for(i=0;i<formSize;i++){
				if(elements[i].type == 'text' ){
					actualInputSize++;
					alert(elements[i].value);
				}
			}
      		alert("size "+actualInputSize);
  		});
 	});
 	function removeBlock(removeButton){
	 	$(removeButton).parent().remove();
 	}
</script>
<form id="myForm">
  <div class="after-add-more">
    <div style="margin:5px;">
      <input type="text" name="input[]" class="form-control" >
    </div>
   <div style="margin:5px;">
      <input type="text" name="input[]" class="form-control">
    </div>
    <div class="add-after" style="margin:5px;">
      <input type="text"  name="input[]" class="form-control">
    </div>
  </div>
 </form>
 <button type="button" name="addKey" id="addKey" class="btn btn-primary">new Fields</button>
 <button type="button" name="getValues" id="getValues"  class="btn btn-success">getValues
   </button>