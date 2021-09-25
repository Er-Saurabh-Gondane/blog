<!DOCTYPE html>
<html>

<body>

<div class="container">
    <h2>POLICE</h2>
    <form acction="{{route(product.form.submit)}}" method="POST">
    <div class="form">
        <div class="form-group col-md-5">
            <lable for="first_name">NAME:</lable>
            <input type="text" name="first_name" id="first_name" class="form-controll"><br>
        </div>
        <div class="form-group col-md-5">
            <lable for="last_name">NAME:</lable>
            <input type="text" name="last_name" id="last_name" class="form-controll"><br>
        </div>
    </div>
      <button type="submit" class="btn-btn-primary">submit</button>
</div>
</form>
</body>
</html>
 