  <?php include('./header.php'); ?>

  <div class="container">

    <h1>Personagens</h1>

    <div class="row">

     <div class="col-md-4">

       <div class="card-personagem">

         <img src="./assets/images/personagem1.jpg" class="img-responsive center-block pointer" data-toggle="modal" data-target="#personagem1" />
         <h3 class="text-center pointer" data-toggle="modal" data-target="#personagem1">Personagem 1</h3>
         <p class="text-center pointer">Art Director</p>

         <div class="col-md-8 col-md-offset-2"><button class="btn btn-success btn-block btn-lg" data-toggle="modal" data-target="#personagem1">História</button></div>
         <br clear="all" />
       </div>

     </div>

     <div class="col-md-4">

       <div class="card-personagem">

         <img src="./assets/images/personagem2.jpg" class="img-responsive center-block pointer" data-toggle="modal" data-target="#personagem2" />
         <h3 class="text-center pointer" data-toggle="modal" data-target="#personagem2">Personagem 2</h3>
         <p class="text-center pointer">Art Director</p>

         <div class="col-md-8 col-md-offset-2"><button class="btn btn-success btn-block btn-lg" data-toggle="modal" data-target="#personagem2">História</button></div>
         <br clear="all" />
       </div>

     </div>

     <div class="col-md-4">

       <div class="card-personagem">

         <img src="./assets/images/personagem3.jpg" class="img-responsive center-block" />
         <h3 class="text-center">Personagem 3</h3>
         <p class="text-center">Art Director</p>

         <div class="col-md-8 col-md-offset-2"><button class="btn btn-success btn-block btn-lg">História</button></div>
         <br clear="all" />
       </div>

     </div>

   </div>

   <div class="row">

     <div class="col-md-4">

       <div class="card-personagem">

         <img src="./assets/images/personagem1.jpg" class="img-responsive center-block" />
         <h3 class="text-center">Personagem 1</h3>
         <p class="text-center">Art Director</p>

         <div class="col-md-8 col-md-offset-2"><button class="btn btn-success btn-block btn-lg">História</button></div>
         <br clear="all" />
       </div>

     </div>

     <div class="col-md-4">

       <div class="card-personagem">

         <img src="./assets/images/personagem2.jpg" class="img-responsive center-block" />
         <h3 class="text-center">Personagem 2</h3>
         <p class="text-center">Art Director</p>

         <div class="col-md-8 col-md-offset-2"><button class="btn btn-success btn-block btn-lg">História</button></div>
         <br clear="all" />
       </div>

     </div>

     <div class="col-md-4">

       <div class="card-personagem">

         <img src="./assets/images/personagem3.jpg" class="img-responsive center-block" />
         <h3 class="text-center">Personagem 3</h3>
         <p class="text-center">Art Director</p>

         <div class="col-md-8 col-md-offset-2"><button class="btn btn-success btn-block btn-lg">História</button></div>
         <br clear="all" />
       </div>

     </div>

   </div>

 </div>

 <!-- Modal p1 -->
 <div class="modal fade" id="personagem1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style="min-width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Personagem 1</h4>
      </div>
      <div class="modal-body">
        
        <div class="row">
          
          <div class="col-md-6">
            
            <img src="./assets/images/personagem1.jpg" class="img-responsive center-block" />

          </div>

          <div class="col-md-6">
            
            <p>
              Lorem ipsum dolor sit amet fsdk fskdj f csd fsd fsd fsdf
            </p>

            <table class="table table-hover table-striped">
              <tr>
                <th>Golpe</th>
                <th>Sequência</th>
              </tr>
              <tr>
                <td><strong>Hadouken</strong></td>
                <td>fsdk sfd jklfsd jfsld</td>
              </tr>
              <tr>
                <td><strong>Hadouken</strong></td>
                <td>fsdk sfd jklfsd jfsld</td>
              </tr>
            </table>

            <button class="btn btn-success btn-block btn-lg">História</button>

          </div>

        </div>

      </div>
    </div>
  </div>
</div>

 <!-- Modal p2 -->
 <div class="modal fade" id="personagem2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style="min-width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Personagem 1</h4>
      </div>
      <div class="modal-body">
        
        <div class="row">
          
          <div class="col-md-6">
            
            <img src="./assets/images/personagem2.jpg" class="img-responsive center-block" />

          </div>

          <div class="col-md-6">
            
            <p>
              Lorem ipsum dolor sit amet fsdk fskdj f csd fsd fsd fsdf
            </p>

            <table class="table table-hover table-striped">
              <tr>
                <th>Golpe</th>
                <th>Sequência</th>
              </tr>
              <tr>
                <td><strong>Hadouken</strong></td>
                <td>fsdk sfd jklfsd jfsld</td>
              </tr>
              <tr>
                <td><strong>Hadouken</strong></td>
                <td>fsdk sfd jklfsd jfsld</td>
              </tr>
            </table>

            <button class="btn btn-success btn-block btn-lg">História</button>

          </div>

        </div>

      </div>
    </div>
  </div>
</div>

<?php include('./footer.php'); ?>
