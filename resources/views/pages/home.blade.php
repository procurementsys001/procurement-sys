@extends('layout.template')

<!--Content of web page -->
@section('content')
<br />
<div class="container">
    <div class="row">  
        <div class="col s12 m12 l4">
                <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <div class="row">
                            <form class="col s12">
                                    <span class="card-title">Name Quotation Group</span>
                              <div class="row">
                                <div class="input-field col s12">
                                  <input id="category" type="text" class="validate">
                                  <label for="category">Give Quotation Group a Name</label>
                                </div>
                              </div>
                              <span class="card-title">Upload Quotations</span>
                              <!--First Quote-->
                              <div class="row">
                                <div class="input-field col s12">
                                  <input id="company-name-1" type="text" class="validate">
                                  <label for="company-name-1">Company Name (Quote 1)</label>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col s12">
                                    <div class="file-field input-field">
                                        <div class="btn">
                                            <span>Quote 1</span>
                                            <input type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text">
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <!--Qoute 2-->
                              <div class="row">
                                <div class="input-field col s12">
                                    <input id="company-name-2" type="text" class="validate">
                                    <label for="company-name-2">Company Name (Quote 2)</label>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col s12 m12 l12">
                                    <div class="file-field input-field">
                                        <div class="btn">
                                            <span>Quote 2</span>
                                            <input type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text">
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!---Quote 3-->
                                <div class="row">
                                    <div class="input-field col s12 m12 l12">
                                        <input id="company-name-3" type="text" class="validate">
                                        <label for="company-name-3">Company Name (Quote 3)</label>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="file-field input-field">
                                            <div class="btn">
                                                <span>Quote 3</span>
                                                <input type="file">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                          </div>
                </div>
                </div>
            <!---form to upload quote-->
           
            <!--End form to upload quote--->
        </div>
        <div class="col s12 m12 l8">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="card ">
                        <div class="card-content ">
                            <span class="card-title center-align"><strong>Quotation Database</strong></span>
                            <!--First Product--->
                            @if(count($posts) > 0)
                                @foreach($posts as $post)
                            <span class="card-title"><strong>{{$post->collection_name}}</strong> <br><small>Uploaded By {{$post->posted_by}} on {{$post->created_at}}</small></span>
                            
                            <table class="striped" >
                                    <thead>
                                      <tr>
                                          <th>REF No.</th>
                                          <th>Company Name</th>
                                          <th>Action</th>
                                      </tr>
                                    </thead>
                            
                                    <tbody>
                                      <tr>
                                        <td>{{$post->refNo_1}}</td>
                                        <td>{{$post->company_name_1}}</td>
                                        <td>
                                            <a href="#" class="btn-floating btn-small waves-effect waves-light btn"><i class="material-icons small">file_download</i></a>&nbsp; &nbsp;
                                            <a href="#" class="btn-floating btn-small waves-effect waves-light btn deep-orange darken-4"><i class="material-icons small">visibility</i></a>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>{{$post->refNo_2}}</td>
                                        <td>{{$post->company_name_2}}</td>
                                        <td>
                                                <a href="#" class="btn-floating btn-small waves-effect waves-light btn"><i class="material-icons small">file_download</i></a>&nbsp; &nbsp;
                                                <a href="#" class="btn-floating btn-small waves-effect waves-light btn deep-orange darken-4"><i class="material-icons small">visibility</i></a>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>{{$post->refNo_3}}</td>
                                        <td>{{$post->company_name_3}}</td>
                                        <td>
                                                <a href="#" class="btn-floating btn-small waves-effect waves-light btn"><i class="material-icons small">file_download</i></a>&nbsp; &nbsp;
                                                <a href="#" class="btn-floating btn-small waves-effect waves-light btn deep-orange darken-4"><i class="material-icons small">visibility</i></a>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <br />
                                        @endforeach
                                        {{$posts->links()}}
                                  <!--Second Product--->
                                  @else
                                    <p>No Quotations Found!!!</p>
                                  @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End content of web page-->
 @endsection