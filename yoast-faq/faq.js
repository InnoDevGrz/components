
function faq() {

    // set tags
    const question = document.getElementsByClassName('schema-faq-question');
    for (var i = 0; i < question.length; i++) {


        let id = question[i].parentNode.getAttribute('id') + '-toggle';

        let h3 = document.createElement('h3');
        let label = document.createElement('label');

        label.setAttribute('for', id);
        label.innerHTML = question[i].innerHTML;
        question[i].parentNode.insertBefore(h3, question[i]); // Hinzufügen des h3-Elements vor dem ursprünglichen Element
        h3.appendChild(label); // Hinzufügen des label-Elements als Kind des h3-Elements
        label.setAttribute('class', 'faq-toggle');


        let input = document.createElement('input');
        input.setAttribute('type', 'checkbox');
        input.setAttribute('id', id);
        question[i].parentNode.insertBefore(input, question[i]);


        let labelicon = document.createElement('label');
        labelicon.setAttribute('for', id);
        //labelicon.innerHTML = "+";
        question[i].parentNode.insertBefore(labelicon, question[i]);
        labelicon.setAttribute('class', 'labelicon');


    }


}