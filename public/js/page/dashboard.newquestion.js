
$( document ).ready(function() {
    $(".minus-option").hide();
});

//Add number of option
$(document).on('click','.add-option',function(){
    $(".minus-option").show();
    var numoption = $('#optionanswer').val();
    if(numoption < 5)
    {
        numoption++;
        $('#optionanswer').val(numoption);
        $('.number-of-option').html(numoption)
        addDynamicOption(numoption);
    }
    if (numoption == 5) {
        $(".add-option").hide();
    }
})
//Minus number of option
$(document).on('click','.minus-option',function(){
    $(".add-option").show();
    var numoption = $('#optionanswer').val();
    if(numoption > 1)
    {
        numoption--;
        $('#optionanswer').val(numoption);
        $('.number-of-option').html(numoption)
        removeDynamicOption();
    }
    if (numoption == 1) {
        $(".minus-option").hide();
        $(".add-option").show();
    }

})
//FUnction to add dynamic option
function addDynamicOption(numoption){

    var html_code =`
    <div class="form-group">
    <label class="control-label">Option #`+numoption+`: *</label>
    <input class="form-control" type="text" name="option[]" value="">
    </div>
    `;

    var answer_code =`
    <option class="option-answer" value="`+numoption+`">Option #`+numoption+`</option>
    `;

    $('.option-area').append(html_code);
    $('.option-answer-area').append(answer_code);
}

function removeDynamicOption(){

    //Remove dynamic option
    $('.option-area .form-group:last').remove();
    $('.option-answer:last').remove();
}