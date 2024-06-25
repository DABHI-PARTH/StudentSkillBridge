// let submit = document.querySelector('.submit-wrapper');
// let form = document.querySelector('.submit-form');
// let demo = document.getElementById('student-role');

// submit.addEventListener('click',(event)=>{
//     event.preventDefault();

//     let location = '';
//     if (demo.value = "Employer") {
//         location = "emp.html";
//     }else if (demo.value = "Student") {
//         location = "index.html";
//     }else if(demo.value = "College") {
//         location = "clg.html";
//     }
//     window.location.href = location;
// });


let submit = document.querySelector('.submit-wrapper');
let form = document.querySelector('.submit-form');
let studentRole = document.getElementById('student-role');

submit.addEventListener('click',(event)=>{
    event.preventDefault();

    let location = '';
    if (studentRole.value === "Employer") {
        location = "emp.html";
    } else if (studentRole.value === "Student") {
        location = "index3.html";
    } else if(studentRole.value === "College") {
        location = "clg.html";
    }
    form.setAttribute('action', location);
    window.location.href = location;
});