// export default {
//     modelshow() {

//         // window.alert('Welcome back Kavi...!')
//         // console.log('Welcome guys! ')

//         const content2 = document.document.getElementById('content2');
//         content.textContent = 'Kavi...';
//         document.body.appendChild(content2);
//     }
// }




// reactModel.js
const reactModel = {
    modelshow() {
        const content2 = document.getElementById('content2');
        if (content2) {
            window.alert('Welcome back Kavi...!')
            // content2.textContent = 'Kavi...';
            // document.body.appendChild(content2);
        } else {
            console.error('Element with id "content2" not found.');
        }
    }
};

export default reactModel;
