var users = [
  { name: 'Mustafa', premium:true},
  { name: 'Ahmed', premium:false},  
  { name: 'Mt7at', premium:true},
  { name: 'Karim', premium:false},
 ]
 
 // What is the use of filter function if you want to loop In 'users' and also filter the ones haven't premium 
 // the first arg is a call back function
 var newUsers = users.filter( user => {
    return users.premium  == true;
 });
 
 
 console.log( newUsers );
 console.log( users ); 
