// const _flogin = document.querySelector('.form-login')
const _btnlogin = document.querySelector('.btn-login')


$('.form-login').on('submit', function(e){
  e.preventDefault()
var _token = $("input[name=_token]").val();
var username = $("input[name=username]").val();
var password = $("input[name=password]").val();
       
  if(_btnlogin.value = 'Login'){
    $.ajax({
      url : `/login`,
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
            window.location.href = '/admin'
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