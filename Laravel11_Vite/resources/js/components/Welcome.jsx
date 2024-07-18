// import React from 'react';
import logo from '@img/puppy.jpg';

export default function Welcome({ title, subheading, mail }) {
    console.log('Welcome component rendered');
    return (
        <>
            <div className="container">
                <div className="text-primary">
                    <h3 className="w-50 "> {title} </h3>
                    <h3 className="w-50 text-danger"> {subheading} </h3>
                    <h3 className="w-50"> {mail} </h3>
                </div>

                {/* image */}
                <div className="row">
                    <div className="container overflow-hidden m-0" style={{width: '18rem', height: '25rem'}}>
                    {/* <img src={logo} alt="" className="w-100 h-100 border border-5 rounded-4"
                        style="object-fit: cover; object-position: center;" /> */}

                    <img src={logo} className="w-100 h-100 border border-danger border-5 rounded-4" style={{objectfit: 'cover', objectposition: 'center'}} />
                </div>
            </div>
        </div >
        </>
    );
}


















// import react from 'react';
// import logo from '@img/puppy.jpg';


// export default function Welcome({ title }, { subheading }) {
//     return (
//         <>
//             <div class="contaniner">
//                 <div className="text-info">
//                     <h3 className="w-50"> {title} </h3>
//                     {/* <h3 className="w-50"> {subheading} </h3> */}
//                 </div>

//                 {/* image */}
//                 <div className="row" >
//                     <div className="conainer overflow-hidder m-0 " style="width: 18rem; height: 25rem;">
//                         <img src={logo} alt="" className="w-100 h-100 border border-5 rounded-4"
//                             style="object-fit: cover; object-position: center;" />
//                     </div>
//                 </div>
//             </div>
//         </>
//     )
// }


