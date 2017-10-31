{{-- {{dd($cities)}} --}}
@extends('layouts.header');
<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('tinymce/skins/lightgray/skin.min.css') }}">
<link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
<script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
@extends('layouts.header');
@section('content')
	<div class="main-container col2-left-layout">
    <div class="main container">
      <div class="row">
        <div class="page-title col-sm-offset-1" style="margin-left: 10%">
          <h1>TIN TUYỂN DỤNG</h1>
        </div>
      </div>
      <div class="row">
        <section class="col-main col-sm-9 col-sm-offset-1">
          
          <form action="{{ route('post.edit',['id'=>$post->id]) }}" method="POST" role="form">
            <legend>Tin tuyển dụng</legend>
            {{csrf_field()}}
            <div class="form-group">
              <label for="">Thành phố</label><br>
              <select name="city_id" >
                <option>--Chọn thành phố--</option>
                @foreach ($cities as $city)
                  <option value="{{$city->id}}" >{{$city->name}}</option>
                @endforeach
                
                {{-- <option value="3">PB&PG</option> --}}
                
              </select>
            </div>

            {{-- @foreach ($errors->all() as $message)
              {{$message}}
            @endforeach --}}
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
              <label for="">Tiêu đề</label>
              <input type="text" class="form-control" name="title" placeholder="Input field" value="{{$post->title}}">
            </div>
            @if (count($errors) > 0)
              <div class="alert alert-danger">                 
                     *{{ $errors->first('title') }}
              </div>
            @endif
            <div class="form-group">
              <label for="">Nội dung</label>
              <textarea class="form-control" name="content" id="content">{!!$post->content!!}</textarea>
              
            </div>
            @if (count($errors) > 0)
              <div class="alert alert-danger">                 
                     *{{ $errors->first('content') }}
              </div>
            @endif
            <div class="form-group">
              <label for="">Địa chỉ</label>
              <input type="text" class="form-control" name="address" placeholder="Input field" value="{{$post->address}}">
            </div>
            @if (count($errors) > 0)
              <div class="alert alert-danger">                 
                     *{{ $errors->first('address') }}
              </div>
            @endif
            {{-- <div class="form-group">
                <div class='input-group date' id='datetimepicker5'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
            <script type="text/javascript">
            $(function () {
                $('#datetimepicker5').datetimepicker({
                    defaultDate: "11/1/2013",
                    disabledDates: [
                        moment("12/25/2013"),
                        new Date(2013, 11 - 1, 21),
                        "11/22/2013 00:53"
                    ]
                });
            });
            </script> --}}
            <div class="form-group">
              <label for="">Ngày bắt đầu</label>
              <input type="date" class="form-control" name="starting_day" placeholder="Input field" value="{{$post->starting_day}}">
            </div>
            <div class="form-group">
              <label for="">Ngày kết thúc</label>
              <input type="date" class="form-control" name="ending_day" placeholder="Input field" value="{{$post->ending_day}}">
            </div>
            <div class="form-group">
              <label for="">Lương</label>
              <input type="text" class="form-control" name="salary" placeholder="Input field" value={{$post->salary}}>
            </div>
            @if (count($errors) > 0)
              <div class="alert alert-danger">                 
                     *{{ $errors->first('salary') }}
              </div>
            @endif
          
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          
        </section>        
      </div>
    </div>
  </div>
  {{-- <script src="{{ asset('js/tinymce.min.js') }}"></script> --}}
  {{-- <script>tinymce.init({ selector:'textarea' })</script> --}}

  <script type="text/javascript" src="{{ asset('tinymce/tinymce.min.js') }}"></script>
  <script type="text/javascript">
    
      // tinymce.PluginManager.add('placeholder', function (editor) {
      //     editor.on('init', function () {
      //         var label = new Label;
      //         onBlur();
      //         tinymce.DOM.bind(label.el, 'click', onFocus);
      //         editor.on('focus', onFocus);
      //         editor.on('blur', onBlur);
      //         editor.on('change', onBlur);
      //         editor.on('setContent', onBlur);
      //         function onFocus() { if (!editor.settings.readonly === true) { label.hide(); } editor.execCommand('mceFocus', false); }
      //         function onBlur() { if (editor.getContent() == '') { label.show(); } else { label.hide(); } }
      //     });
      //     var Label = function () {
      //         var placeholder_text = editor.getElement().getAttribute("placeholder") || editor.settings.placeholder;
      //         var placeholder_attrs = editor.settings.placeholder_attrs || { style: { position: 'absolute', top: '2px', left: 0, color: '#aaaaaa', padding: '.25%', margin: '5px', width: '80%', 'font-size': '17px !important;', overflow: 'hidden', 'white-space': 'pre-wrap' } };
      //         var contentAreaContainer = editor.getContentAreaContainer();
      //         tinymce.DOM.setStyle(contentAreaContainer, 'position', 'relative');
      //         this.el = tinymce.DOM.add(contentAreaContainer, "label", placeholder_attrs, placeholder_text);
      //     }
      //     Label.prototype.hide = function () { tinymce.DOM.setStyle(this.el, 'display', 'none'); }
      //     Label.prototype.show = function () { tinymce.DOM.setStyle(this.el, 'display', ''); }
      // });

      tinymce.init({
        selector: '#content',
        height: 350,
        theme: 'modern',
        menubar: false,
        autosave_ask_before_unload: false,
        plugins: [
          "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak",
          "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
          "table contextmenu directionality emoticons template textcolor paste fullpage textcolor colorpicker textpattern codesample"
        ],
        toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect | cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | insertdatetime preview | forecolor backcolor | table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | visualchars visualblocks nonbreaking template pagebreak restoredraft | codesample",
        image_advtab: true,
        content_css: [
          '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
          '//www.tinymce.com/css/codepen.min.css'
        ],
        relative_urls: false,
        remove_script_host : false,
        file_browser_callback : function(field_name, url, type, win) {
          var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
          var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

          var cmsURL = route_prefix + '?field_name=' + field_name;
          if (type == 'image') {
            cmsURL = cmsURL + "&type=Images";
          } else {
            cmsURL = cmsURL + "&type=Files";
          }

          tinyMCE.activeEditor.windowManager.open({
            file : cmsURL,
            title : 'Image manager',
            width : x * 0.9,
            height : y * 0.9,
            resizable : "yes",
            close_previous : "no"
          });
        }
       });
  
  </script>

@endsection
@section('footer')
@include('layouts.footer')
@endsection