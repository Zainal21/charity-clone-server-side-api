// const _flogin = document.querySelector('.form-login')
const _btnlogin = document.querySelector('.btn-login')
const _token = document.querySelector('[name=_token]');
const _username = document.querySelector('[name=username]');
const _password = document.querySelector('[name=password]');
// // console.log(_token.value)
// _flogin.addEventListener('submit', function(e){
//   e.preventDefault()
//   if(_btnlogin.value == 'Login'){
//     fetch(`http://127.0.0.1:8000/login`, {
//         accept : 'application/json',
//         method:'POST',
//         // Content-Type :'application/json',
//         data: {
//           "name" : _username.value,
//           "password" : _password.value,
//           "_token" : _token
//         }
     
//     }).then(data => console.log(data))
//       .catch(err =>{
//         console.log(err)
//       })

//   }
// })

$('.form-login').on('submit', function(e){
  e.preventDefault()
  if(_btnlogin.value = 'Login'){
    $.ajax({
      url : `http://127.0.0.1:8000/login`,
      method: 'POST',
      dataType:'JSON',
      data : {
        "name" : _username.value,
        "password" : _password.value,
        "_token" : _token.value
      },
      success: (data) =>{
        if(data.success){
          window.location.href = "/admin"
        }else{
          console.log(data.error)
        }
      }
    })
  }
   
});