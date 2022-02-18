function makeactive(elem) {
    var a = document.getElementsByTagName('a');
    var div1=document.getElementById('step-1-con');
    var div2=document.getElementById('step-2-con');
    var div3=document.getElementById('step-3-con');
    var div4=document.getElementById('step-4-con');
    for (i = 0; i < a.length; i++) {
        a[i].classList.remove('active-tab');
    }
    elem.classList.add('active-tab');
    if(elem.id=="step-1")
    {
        div1.classList.add('show');
        div1.classList.add('show');
        div2.classList.add('hide');
        div3.classList.add('hide');
        div4.classList.add('hide');
    }
    if(elem.id=="step-2")
    {
        div2.classList.add('show');
        div1.classList.add('hide');
        div3.classList.add('hide');
        div4.classList.add('hide');
    }
    if(elem.id=="step-3")
    {
        div3.classList.add('show');
        div2.classList.add('hide');
        div1.classList.add('hide');
        div4.classList.add('hide');
    }
    if(elem.id=="step-4")
    {
        div4.classList.add('show');
        div2.classList.add('hide');
        div3.classList.add('hide');
        div1.classList.add('hide');
    }
}