import '../css/main.css';
import  './jquery-3.6.0.min'


function tellPhone(){
    let tell_we=document.querySelector('.call_we');
    let  exit_form;
    tell_we.addEventListener('click', function (e) {
        e.preventDefault();
        let call_form=document.createElement("div");
        call_form.classList.add('dell_form');
        call_form.innerHTML='<div class="tell_form"> <form class="form_reviews">\n' +
            '                        <h3 class="tell_form_h3">Оставьте Ваш телефон и мы перезвоним</h3>\n' +
            '                        <div class="form-group ">\n' +
            '                            <input type="tel" class="form-control buttonse1" id="name"  placeholder="+7 (000) 000 0000">\n' +
            '                        </div>\n' +
            '                        <button type="submit" class="btn btn-primary mt-2 mb-4 buttonse1">Отправить</button>\n' +
            '                    </form> ' +
            '<p>+7(961)806-40-64</p></div>';
        tell_we.before(call_form);
        let exit_icon=document.createElement("div");
        exit_icon.innerHTML='<a class="t651__btn_wrapper call_we sedow" style="background:#ffffff;">  <svg class="t651__icon-close" width="16px" height="16px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill="#000" fill-rule="evenodd"> <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> </g> </svg> </a>';
        exit_icon.classList.add('dell_icon');
        tell_we.before(exit_icon);
        exit_form=document.querySelector('.dell_icon');
        exit_form.addEventListener('click', function (e) {
            e.preventDefault();
            let f_1=document.querySelector('.dell_form');
            let  f_2=document.querySelector('.dell_icon');
            f_1.remove();
            f_2.remove();
            tell_we.style.display='block';
        });
        tell_we.style.display='none';

    });
}
function zapis(){
   let button_info_curse=document.querySelector('.podrobW');
   button_info_curse.addEventListener("click", function (e){
       e.preventDefault();
     ////////////////Делаем фетч/////////////////////
       let data=button_info_curse.getAttribute('data-course');
       let formData = new FormData();
       formData.append('ID_course', data);
       console.log(data);
       fetch('/show_course', {
           method: 'post',
           body: formData
       }).then(response => response.json())
           .then(data => {
            console.log(data)// получили данные о курсе отправляем их на страницу
           });
    ////////////////////////////////////
       console.log("sdasd");
       let bloc=document.createElement("div");
       let heder=document.querySelector('header');
       bloc.classList.add('info_about_curse');
       bloc.innerHTML='<a class="t651__btn_wrapper escepe_button" style="background:#ffffff;">  <svg class="t651__icon-close" width="16px" height="16px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill="#000" fill-rule="evenodd"> <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> </g> </svg> </a>' +
           '<div class="container">\n' +
           '  <div class="row">' +
           '    <div class="col-6">\n' +
           '      Одна из двух колонок\n' +
           '    </div>\n' +
           '    <div class="col-6">\n' +
           '      Одна из двух колонок\n' +
           '    </div>\n' +
           '  </div>\n' +
           '</div>';
       heder.before(bloc);
       let clic_button=document.querySelector('.escepe_button');
       clic_button.addEventListener('click', function (e){
           e.preventDefault();
           let dell_bloc=document.querySelector('.info_about_curse');
           dell_bloc.remove();
       })

   });
}
tellPhone();
zapis();