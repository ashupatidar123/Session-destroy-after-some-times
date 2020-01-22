
$currentTime = date('Y-m-d H:i:s');
$newTime = date("Y-m-d H:i:s",strtotime("+1 minutes", strtotime($currentTime)));

======Session set In laravel======
$search['session_time']=$newTime;
Session::put('userSearch',$search);

=====Session check and destroy======
if(!empty(Session::get('userSearch')))
{
  $timeCheck = Session::get('userSearch');
  if($currentTime>$timeCheck['session_time']){
    Session::forget('userSearch');				
  }			
}
