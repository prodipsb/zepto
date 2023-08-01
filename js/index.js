
const heading = document.getElementById("heading");
const diaplayHeading = document.getElementById("diaplayHeading");

const description = document.getElementById("description");
const diaplayDescription = document.getElementById("diaplayDescription");

const headingColor = document.getElementById("color");
const headingAlign = document.getElementById("align");

const preview = document.querySelector('#preview')


/* Event listener */
heading.addEventListener('input', onHeadingChange);

/* Function */
function onHeadingChange(){
    diaplayHeading.innerText = this.value;
}


/* Event listener */
description.addEventListener('input', onDescriptionChange);

/* Function */
function onDescriptionChange(){
    diaplayDescription.innerText = this.value;
}


const fileUpload = document.getElementById("fileUpload");


fileUpload.addEventListener('change', fileSelectHandler, false);

function fileSelectHandler(e) {
    // Fetch FileList object
    console.log('evnt', e)
    var files = e.target.files || e.dataTransfer.files;
    console.log('files', files)

    let file = e.target.files[0];
    let src = URL.createObjectURL(file);
    let img = document.createElement('img');
	img.src = src;
	preview.append(img);

}



    // ----------------- Remove Heading Section -------------
    const headingClose = document.getElementById("headingClose");
    const headingSection = document.getElementById("headingSection");
    const posterImageSection = document.getElementById("posterImageSection");
    const descSection = document.getElementById("descSection");
    
    headingClose.addEventListener('click', removeHeadingSection, false);

    function removeHeadingSection(e){
        headingSection.remove();
        posterImageSection.classList.add('mt-14');
    }


    const posterClose = document.getElementById("posterClose");
    
    posterClose.addEventListener('click', removePosterImageSection, false);

    function removePosterImageSection(e){
        posterImageSection.remove();
        descSection.classList.add('mt-14');
    }


    const descClose = document.getElementById("descClose");
    descClose.addEventListener('click', removePosterDescriptionSection, false);

    function removePosterDescriptionSection(e){
        descSection.remove();
    }




    // --------------- Download Poster Submission -----------------

    const download = document.getElementById("download");
    download.addEventListener('click', downloadPoster, false);

    function downloadPoster(e){
        e.preventDefault();
        const HeadingTitle = heading.value;
        const posterDescription = description.value;
        const HeadingAlign = headingAlign.value;
        const HeadingColor = headingColor.value;
        


        const files = document.querySelector('[type=file]').files;
        const formData = new FormData();

        formData.append('heading', HeadingTitle)
        formData.append('description', posterDescription)
        formData.append('align', HeadingAlign)
        formData.append('color', HeadingColor)
        formData.append('file', files[0])

        const url = '../process.php';

        fetch(url, {
            method: 'POST',
            body: formData,
          })
          .then(response => response.blob())
            .then(blob => {
            var url = window.URL.createObjectURL(blob);
            var a = document.createElement('a');
            a.href = url;
            a.download = "filename.jpg";
            document.body.appendChild(a); 
            a.click();    
            a.remove();  
        });

    }



    function changeAlign(value) {

        if(value == 'center'){
            
            diaplayHeading.classList.remove('text-right');
            diaplayHeading.classList.remove('text-left');
            diaplayHeading.classList.add('text-center');

        }else if (value == 'right') {

            diaplayHeading.classList.remove('text-center');
            diaplayHeading.classList.remove('text-left');
            diaplayHeading.classList.add('text-right');

        } else {
            diaplayHeading.classList.remove('text-center');
            diaplayHeading.classList.remove('text-right');
            diaplayHeading.classList.add('text-left');
        }

        headingAlign.value = value;
    }


    function changeColor(value) {

        if(value == 'blue'){
            
            diaplayHeading.classList.remove('text-green-500');
            diaplayHeading.classList.remove('text-black-500');
            diaplayHeading.classList.add('text-blue-500');

        }else if (value == 'green') {

            diaplayHeading.classList.remove('text-black-500');
            diaplayHeading.classList.remove('text-blue-500');
            diaplayHeading.classList.add('text-green-500');

        } else {
            diaplayHeading.classList.remove('text-green-500');
            diaplayHeading.classList.remove('text-blue-500');
            diaplayHeading.classList.add('text-black-500');
        }

        headingColor.value = value;
    }






