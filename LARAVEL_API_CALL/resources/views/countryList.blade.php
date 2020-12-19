<h1>Country List</h1>

<ul>
 @foreach($alldata['data'] as $key => $value)
 <li>   {{$value['country']}} </li>
 @endforeach
 </ul>





 <!-- print("<pre>".print_r($alldata['data'],true)."</pre>"); -->

