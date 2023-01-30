<?php
  if(isset($_POST['submit'])){
    saveMessage($_POST);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
        <h1>Bilieto formavimas</h1>

          <form class="row g-3" method="post">
                  <div class="col-md-8 form-group">
                    <label class="form-label">First name/ Last name</label>
                    <input type="text" name="firstName" placeholder="Jonas Jonaitis" class="form-control">
                  </div>
                  <div class="col-md-4 form-group" >
                    <label class="form-label">Code Numeric Personal</label>
                    <input type="text" name="personalCode" placeholder="38411290712" class="form-control">
                  </div>
                  <div class="col-md-4 form-group">
                    <select name="from" class="form-control">
                    <option selected disabled>--FROM--</option>
                    <?php foreach($citiesFrom as $code => $city):?>
                    <option value="<?=$city;?>"><?=$city;?></option>
                    <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="col-md-4 form-group">
                    <select name="to" class="form-control">
                    <option selected disabled>--TO--</option>
                    <?php foreach($citiesTo as $code => $city):?>
                    <option value="<?=$city;?>"><?=$city; ?></option>
                    <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="col-md-4 form-group">
                    <select name="flight" class="form-control">
                    <option selected disabled>--FLIGHT--</option>
                    <?php foreach($flights as $code => $flight):?>
                    <option value="<?=$flight;?>"><?=$flight; ?></option>
                    <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="col-md-4 form-group">
                    <select name="bags" class="form-control">
                    <option selected disabled>--Bags--</option>
                    <?php foreach($bags as $code => $bag):?>
                    <option value="<?=$bag;?>"><?=$bag; ?></option>
                    <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="col-12 form-group">
                  <div class="col-4 form-group" >
                    <label class="form-label">Price</label>
                    <input type="text" name="price" placeholder="" class="form-control">
                  </div>
                  </div>
                  <div class="col-12 form-group">
                  <textarea name="message" placeholder="Your notices" class="form-control"></textarea>
                  </div>
                  <div class="col-12 form-group">
                    <button type="submit" name="submit" class="btn btn-primary">Submit form</button>
                  </div>
          </form>
              <section>
                <h2>Bilietas</h2>
                <table class="table table-bordered table-striped">
                    <tr>
                      <th>Vardas/Pavardė</th>
                      <th>Asmens kodas</th>
                      <th>Iš</th>
                      <th>Į</th>
                      <th>Reiso nr</th>
                      <th>Bagažas</th>
                      <th>Kaina</th>
                      <th>Pastabos</th>
                    </tr>
                    <?php foreach(getData() as $list):?>
                      <tr>
                        <?php $list = explode(',', $list);?>
                          <?php foreach($list as $item):?>
                            <?php if(!empty($item)):?>
                            <td><?=$item;?></td>
                            <?php endif;?>
                          <?php endforeach; ?>
                      </tr>
                      <?php endforeach;?>
                </table>
              </section>
              <div>
                <h2>Bilietas antras</h2>
                      
                    <?php foreach(getData() as $list):?>
                      <p>
                      <?php $list = explode(',', $list);?>
                          <?php foreach($list as $item):?>
                            <?php if(!empty($item)):?>
                              <h5><?=$item;?></h5>
                            
                            <?php endif;?>
                          <?php endforeach; ?>
                      </p>
                      <?php endforeach;?>
              </div>

        </div>
      </div>
    </div>
</body>
</html>

