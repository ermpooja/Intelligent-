<div class="filter main">

      <?php if(isset($getCourses) && count($getCourses) > 0){ ?>
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
      
  <?php }else{ ?>
    <p> No data found</p>
  <?php } ?>
</div>