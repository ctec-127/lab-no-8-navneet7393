<div class="container">
<div class="jumbotron ">
    <h1 class="display-3">Temperature Converter</h1>
    <p class="lead">CTEC 127 - PHP with SQL 1</p>
    <hr class="my-2">
    <p>Have fun!</p>
​
</div>
<div class="row"> <!--first row-->
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label for="temp">Temperature</label>
			<input type="text" value="<?php if (isset($_POST['originaltemp'])) echo $_POST['originaltemp'];?>" name="originaltemp" size="7" maxlength="7" id="temp" class="form-control">
		</div>

        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
			<select name="originalunit" class="form-control originalunit">
				<option value="--Select--"<?php if($originalUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
				<option value="celsius"<?php if($originalUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
				<option value="farenheit"<?php if($originalUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
				<option value="kelvin"<?php if($originalUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
			</select>
        </div> <!-- end of first column -->
		</div> <!-- end first row -->
		

        <div class="row mt-20">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label for="convertedtemp">Converted Temperature</label>
                <input type="text" value="<?php if (isset($_POST['originaltemp'])) echo round($convertedTemp, 1);?>" 
                name="convertedtemp" size="7" maxlength="7" id="convertedtemp" class="form-control">
            </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2"> <!--start of second column-->
            <select name="conversionunit" class="form-control conversionunit">
                <option value="--Select--"<?php if($conversionUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
                <option value="celsius"<?php if($conversionUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
                <option value="farenheit"<?php if($conversionUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
                <option value="kelvin"<?php if($conversionUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
            </select>
        </div> <!--end of second column-->
		</div> <!-- end of second row -->
		
		<br>
        <div class="row">
            <div class="col-12">
            <input type="submit" value="Convert" class="btn btn-success"/>   
            </div>
		</div>
​
	</form>
    </div>
</div>








