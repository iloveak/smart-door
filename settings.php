<?php include("head.php"); ?>



<style>

.btn3d {
	position: relative;
	top: -6px;
	border-radius: 50px;
	transition: all 40ms linear;
	margin-top: 10px;
	margin-bottom: 10px;
	margin-left: 2px;
	margin-right: 2px;
}

.btn3d:active,
.btn3d.active {
	top: 2px;
}
.btn3d.btn-success {
	box-shadow: 0 0 0 1px #31c300 inset, 0 0 0 2px rgba(255, 255, 255, 0.15) inset, 0 8px 0 0 #5eb924, 0 8px 8px 1px rgba(0, 0, 0, 0.5);
	background-color: #78d739;

}

.btn3d.btn-success:active,
.btn3d.btn-success.active {
	box-shadow: 0 0 0 1px #30cd00 inset, 0 0 0 1px rgba(255, 255, 255, 0.15) inset, 0 1px 3px 1px rgba(0, 0, 0, 0.3);
	
	background-color: #78d739;
}


</style>

		<button type="button" class="btn btn-success btn-lg btn3d"><span class="glyphicon glyphicon-ok"></span> Success</button>



<?php include("footer.php"); ?>