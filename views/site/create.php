
php

/* @var $this yii\web\View */
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<form action="site\create" method="POST">
  <fieldset>1
    <legend>Input User</legend>
    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
   <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="username">
    </div>
    <div class="form-group">
      <label for="user">user</label>
      <input type="text" class="form-control" id="user" name="user" placeholder="user">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Password">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>