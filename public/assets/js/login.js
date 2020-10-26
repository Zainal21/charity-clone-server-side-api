// const _flogin = document.querySelector('.form-login')
const _btnlogin = document.querySelector('.btn-login')
const Backend = 'http://localhost:8000/api/v1';

$('.form-login').on('submit', function(e){
  e.preventDefault()
var _token = $("input[name=_token]").val();
var username = $("input[name=username]").val();
var password = $("input[name=password]").val();
       
  if(_btnlogin.value = 'Login'){
    $.ajax({
      url : `${Backend}/login`,
      method: 'POST',
      dataType:'JSON',
      data : {
        _token : _token,
        username : username,
        password : password
      },
      success: (data) =>{
        if(data.success){
          Swal({
            title:'Login Berhasil',
            text:'Silahkan Tunggu, Halaman Segera Dialihkan',
            type:'success'
          }).then(()=>{
            window.location.href = 'http://localhost:8000/admin'
          })
        }else if(data.errors){
          console.log(data.errors)
          Swal({
            title:'Akses Ditolak',
            text:'Silahkan Coba lagi',
            type:'error'
          })
        }
      }
    })
  }
   
});