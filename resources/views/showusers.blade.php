@extends('masterpage');

@section('content');
     
    <form method='POST' action='showusers'>
    {{csrf_field()}}

    /*
       <p style='margin-top:100px;margin-left:50px'>username</p>
       <input style='height:30px;width:300px;margin-left:50px' type='text' name='username'>  
    
       <p style='margin-left:50px;margin-top:10px'> id</p>
       <input style='height:30px;margin-left:50px;width:300px' type='password' name='id'>
       <br>

       <td colspan='2' style='b'> <input style='height:30px;color:white;background-color:black;margin-left:50px;margin-top:20px' type='submit' name='id' value='search'>   
        </td>

    </form>
    */

    <table border = "1" style='margin-top:50px;margin-left:50px'>
       <tr>
       <td>Id</td>
       <td>UserName</td>
       <td>First Name</td>
       <td>last Name</td>
       <td>Email</td>
       </tr>
       @foreach ($users as $user)
       <tr>
       <td>{{ $user->id }}</td>
       <td>{{ $user->username }}</td>
       <td>{{ $user->fname }}</td>
       <td>{{ $user->lname }}</td>
       <td>{{ $user->email }}</td>
       </tr>
       @endforeach
       </table>

        

 @stop