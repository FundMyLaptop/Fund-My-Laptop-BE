<div>
    <div class="row mt-3 ml-2">
      <h4></h4>
    </div> 
    <h4 style="margin-bottom: 30px;">Comments</h4> 
    <div class="row each_detail_row">
      <div class="col justify-content-sm-center">
        <form method="post"  id="comment_form">
          <div class="col-sm-12 col-lg-12 col-xs-12">
            <div class="form-group">
              <input type="text"  name="comment_name"id="comment_name" class="form-control" placeholder="Enter Name">
           </div>
          </div>
          <div class="col-sm-12 col-lg-12 col-xs-12">   
            <div class="form-group">
              <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter comment" rows="5"></textarea>
            </div>
          </div>
          <div class="form-group">
            <button type="button" name="submit" id="submit" value="submit" class="btn funding_Loan float-right">Submit</button>
          </div>
        </form>
        <span id="comment_message"></span>
        <br>
        <div id="display_comment">
            <div class="comment">
                
            </div>
            <div class="reply">
                
            </div>
        </div>    
      </div>
    </div>
  </div>