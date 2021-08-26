<form action="/search"
  method="GET"
  enctype="multipart/form-data"
  class="col-sm-12">
  @csrf
  <div class="container col-md-12">
      <div class="row d-flex justify-content-center">
          <div class="col-md-12">
              <div class="card">
                  <h4 class=" bg-secondary text-white text-center">Search According to Service Type</h4>
                  <div class="d-flex justify-content-center">
                      <select name="category" id="" class="mx-2 form-select">
                        <option selected="all">All</option>
                        <option value="inservice">Inservice</option>
                        <option value="infamily">Infamily</option>
                        <option value="exservice">exservice</option>
                        <option value="exfamily">exfamily</option>
                      </select>
                      <div> 
                        <input type="text" class="search-input mx-2 " placeholder="Record No || Comp Code" name="searchrecord"> 
                      </div>
                      <button type="submit" class="ml-2 btn btn-success"> Search</button>
                  </div>
              
              </div>
          </div>
      </div>
  </div>
</form>
