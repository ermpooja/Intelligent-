<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <style type="text/css">
    body{

    background-color: #f5f6f7;
}

.wrapper{
  width: 50%;

        margin-top: 50px;
}
@media(max-width:992px){
 .wrapper{
  width:100%;
} 
}
.panel-heading {
  padding: 0;
    border:0;
    padding: 9px 3px !important;
}
.panel-title>a, .panel-title>a:active{
    display: block;
    padding: 10px;
    color: #555;
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 1px;
    word-spacing: 3px;
    text-decoration: none;
}
.panel-heading  a:before {
   font-family: 'Glyphicons Halflings';
   content: "\e114";
   float: right;
   transition: all 0.5s;
}
.panel-heading.active a:before {
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    transform: rotate(180deg);
} 

.panel-default > .panel-heading {
    color: #282b2f;
    background-color: #ffffff !important;
    border-color: #d5d5d5;
}

@keyframes click-wave {
    0% {
        height: 40px;
        width: 40px;
        opacity: 0.15;
        position: relative
    }

    100% {
        height: 200px;
        width: 200px;
        margin-left: -80px;
        margin-top: -80px;
        opacity: 0
    }
}

.option-input {
        -webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
    -o-appearance: none;
    appearance: none;
    position: relative;
    top: -8.66667px;
    right: 0;
    bottom: 0;
    left: 0;
    height: 24px;
    width: 24px;
    transition: all 0.15s ease-out 0s;
    background: #cbd1d8;
    border: none;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    margin-right: 0.5rem;
    outline: none;
    position: relative;
    z-index: 1000;
}

/*.option-input:hover {
    background: #9faab7
}*/

.option-input:checked {
    background: #2874ef
}

.option-input:checked::before {
        height: 24px;
    width: 24px;
    position: absolute;
    content: "\f111";
    font-family: "Font Awesome 5 Free";
    display: inline-block;
    font-size: 14.66667px;
    text-align: center;
    line-height: 26px;
}

.option-input:checked::after {
    -webkit-animation: click-wave 0.15s;
    -moz-animation: click-wave 0.15s;
    animation: click-wave 0.15s;
    background: #E91E63;
    content: '';
    display: block;
    position: relative;
    z-index: 100
}

.option-input.radio {
    border-radius: 50%
}

.option-input.radio::after {
    border-radius: 50%
}


.checkbox input[type="checkbox"], .checkbox-inline input[type="checkbox"] {
    float: left;
    margin-left: -4px !important;
        margin-top: 9px;
}


input[type="checkbox"]:focus {
    outline: thin dotted #333;
    outline: 0px auto -webkit-focus-ring-color;
    outline-offset: 0px;
}

.ml-10 {
        margin-left: 10px;
    font-size: 12px;
    color: #080808;
}



.btn.btn-out {
    outline: 1px solid #fff;
    outline-offset: -5px
}

.btn {
    border-radius: 2px;
    text-transform: capitalize;
    font-size: 11px;
    padding: 10px 19px;
    cursor: pointer;
    color: #fff
}

.fa{
    font-size: 12px;
    color: #2874ef;
}


.refine{
        padding: 0px 0px !important;
}

.filters-text{
    
    background: #fff;
    border: 1px solid #d5d5d5;
    margin-bottom: 15px;
    padding: 12px;

}  

.filter-span{
        font-size: 17px;
    color: #2874ef;
}


 /*style for image and text*/
 .main-topic{
  border:1px solid blue;
}
/** Clearfix **/
.main-topic::after{
  content:"";
  display:block;
  clear:both;
}
.right-text{
  width:50%;
  float:right;
}
.left-picture{
  float:left;
  width:50%;
}
.left-picture img{
  max-width:64%
}
 /*style for image and text*/
  </style>
</head>
<body>


<div class="col-md-3" >
<div class="wrapper center-block">

  <div class="filters-text">

<span class="filter-span">Filters</span>
<span style="float:right;"><i class="fa fa-filter"></i></span>

</div> 
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading1">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" aria-controls="collapse1">
          Topic
        </a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
      <div class="panel-body">
        @foreach($getTopics as $value)
        <div class="checkbox">
          <label>        
             <input type="checkbox" class="option-input topic-input checkbox" name="topic[]" value="{{$value->id}}" /> <span class="ml-10">{{$value->name}}</span>  
          </label>

        </div>
        @endforeach

      </div>
    </div>
  </div>

  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading2">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
          Price
        </a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
      <div class="panel-body">
        @foreach($prices as $course)
        <div class="checkbox">
          <label>        
             <input type="checkbox" class="option-input price-input checkbox" name="course[]" value="{{$course->price_range}}" /> <span class="ml-10">{{$course->price_range}}</span>
         
          </label>
        </div>
        @endforeach

      </div>
    </div>
  </div>


</div> 
 

</div>

</div>

<div class="col-md-8">


 
<select class="form-control sorting" id="dropdownMenuButton" name="dropdownMenuButton" style="margin-left: 753px;width: 15%;
    height: 50px;">
    <option value="newest">Newest</option> 
    <option value="ascending">Ascending</option> 
</select>
<div class="filter main" id="filter">
      @foreach($getCourses as $course)
    <div class="main-topic">
        <div class="left-picture">
        <img src="{{url('public/design.jpg')}}">
      </div>
      <div class="right-text">
        <h3>{{$course->course_name}}</h3>
        <p>
          Deadpool fans want its superhero to host Saturday Night Live — Deadpool, that is, not Ryan Reynolds. Fans of the Merc With a Mouth, who led the Marvel film to a history-making debut at the box office, have launched a Change.org petition calling for the antihero to host an upcoming episode of the NBC sketch comedy show. "We've all seen the trailers, the magazine covers, the viral videos, and the billboards by now, so what's left for Deadpool (Ryan Reynolds) to do?" creator Andrew Stege asks in the petition, which is directed to SNL, creator Lorne Michaels, parent.
        </p>
      </div>       
  </div>
 
  @endforeach

  {!! $getCourses->links() !!}
</div>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<script>  
$(document).ready(function(){  

    var topic = [];
    var price = [];
    var sort = '';
    var page = 0;

  $(".topic-input").click(function(){ 


  var value = $(this).val();

  if(topic.includes(value)){
    var index = topic.indexOf(value);
      if (index !== -1){
          topic.splice(index, 1);
      }
  } else{
    topic.push(value);
  }

   console.log(topic);
   getData();
 
  });  

   $(".price-input").click(function(){ 
      var value = $(this).val();

        if(price.includes(value)){
          var index = price.indexOf(value);
            if (index !== -1){
                price.splice(index, 1);
            }
        } else{
          price.push(value);
        }

         console.log(price);
         getData();
   });

    $('select').on('change', function() {
       sort = $(this).val();
      // console.log('sort',sort)
      getData();
    });

     $(document).on('click', '.pagination a', function(event){
  event.preventDefault(); 
   page = $(this).attr('href').split('page=')[1];
  getData();
 });

   function getData(){

      jQuery.ajax({  
        url: "{{url('/home')}}", 
        data: {topic: topic,price:price,sort:sort,page:page}, 
        type: 'GET',  
          success: function(data) {  
           $("#filter").html(data);                
          }  
        }); 
   }
});  
</script>  

</body>
</html>