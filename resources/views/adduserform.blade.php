@extends('masterpage')

@section('content')
     

        <div style='margin-left:100px'> 

        <form method="POST" style='margin-top:100px' action="adduser">
        {{csrf_field()}}
        <table>
        <h1 style='color:black;margin-bottom:10px'> Add User</h1>
        
     <tr>
    
       <td> First name</td>
       <td> <input style='height:30px;width:300px' type='text' name='firstname' ></td>
        
     </tr>  
      
      <tr>
    
       <td> Last name</td>
       <td> <input style='height:30px;width:300px' type='text' name='lastname'> </td>
        
     </tr>
  
     <tr>
    
       <td>Username</td>
       <td><input style='height:30px;width:300px' type='text' name='username'> </td>
        
     </tr>
      
     <tr>
    
       <td>Password </td>
       <td><input style='height:30px;width:300px' type='password' name='password'> </td>
        
     </tr>
      
     <tr>
    
       <td>Email</td>
       <td><input style='height:30px;width:300px' type='text' name='email'> </td>
        
     </tr>
      
     <tr>
    
        <td colspan='2' style='b'> <input style='height:30px;color:white;background-color:black;' type='submit' name='submit' value='Submit'>   
        </td>
        
     </tr>
              
  </table> 
         
        
    </form>
 @stop