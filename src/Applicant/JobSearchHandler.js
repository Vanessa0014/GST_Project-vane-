function triggerFilter(){
    var divFilter = $('#divFilter').attr('class'); //variable name (id or class)

    if(divFilter == 'container-fluid mt-3'){ //variablename = class
        $('#divFilter').addClass('d-none d-sm-none');
    }
    else{
        $('#divFilter').removeClass('d-none d-sm-none');
    }
}

function viewJobPostDetails(ID){
    $('#'+ID).addClass('is-loading');
    $('#'+ID).prop('disabled', true);

    var jpID = ID.replace('btnViewJobPosting','');
    
    location.href = "#"+jpID;

    $.ajax({
        type: 'POST',
        url: '../PHPFiles/Applicant/JobSearch/jobpostingdetailsget.php',
        datatype: 'html',
        data: {
            JobPostingID: jpID
        },
        success: function(response){
            if(response == '1'){
                swal({
                    title: 'Failed Retrieve Job Posting Details!',
                    text: "Something went wrong while retrieving job posting details. Data handling failed, please try again.",
                    icon: 'error',
                    buttons : {
                        confirm: {
                            text : 'Okay',
                            className : 'btn btn-success'
                        }
                    }
                }).then(function(){
                    $('#'+ID).removeClass('is-loading');
                    $('#'+ID).prop('disabled', false);
                });
            }
            else if(response == '2'){
                swal({
                    title: 'Failed Retrieve Job Posting Details!',
                    text: "Something went wrong while retrieving job posting details. Please try again.",
                    icon: 'error',
                    buttons : {
                        confirm: {
                            text : 'Okay',
                            className : 'btn btn-success'
                        }
                    }
                }).then(function(){
                    $('#'+ID).removeClass('is-loading');
                    $('#'+ID).prop('disabled', false);
                });
            }
            else if(response == '3'){
                swal({
                    title: 'No Job Posting Details Found!',
                    text: "There is no details regarding the job posting you selected. Please try again later, or contact the administrator for assistance.",
                    icon: 'info',
                    buttons : {
                        confirm: {
                            text : 'Okay',
                            className : 'btn btn-success'
                        }
                    }
                }).then(function(){
                    $('#'+ID).removeClass('is-loading');
                    $('#'+ID).prop('disabled', false);
                });
            }
            else{
                var decodedResponse = JSON.parse(response);

                $('#lblJobTitle').text(decodedResponse.JobTitle);
                $('#lblCompanyName').text(decodedResponse.CompanyName);
                $('#lblLocation').text(decodedResponse.Location);
                $('#lblClassification').text(decodedResponse.Classification);
                $('#lblSubClassification').text(decodedResponse.SubClassification.replace(',', ', '));
                $('#lblJobSalary').text(decodedResponse.Salary);
                $('#lblJobSummary').text(decodedResponse.Summary);
                $('#listQualifications').html(decodedResponse.Qualifications);
                $('#listEducationExperiences').html(decodedResponse.Requirements);
                $('#listQuestionnaires').html(decodedResponse.Questionnaires);

                $('#divPostingList').addClass('d-none d-sm-none');
                $('#divPost').removeClass('d-none d-sm-none');

                $('#'+ID).removeClass('is-loading');
                $('#'+ID).prop('disabled', false);
            }
        },
        error: function(){
            swal({
                title: 'Failed to Connect to Server!',
                text: "Something went wrong while trying to connect to the server. Please try again later.",
                icon: 'error',
                buttons : {
                    confirm: {
                        text : 'Okay',
                        className : 'btn btn-success'
                    }
                }
            }).then(function(){
                $('#'+ID).removeClass('is-loading');
                $('#'+ID).prop('disabled', false);
            });
        }
    });
}
function backToPostingList(){

    if (window.location.hash) {
        // Replace the hash with an empty string
        history.replaceState(null, null, ' ');
    }

    $('#divPostingList').removeClass('d-none d-sm-none');
    $('#divPost').addClass('d-none d-sm-none');
}

function BookmarkJobPosting(){
    $('#btnBookmarkJobPosting').addClass('is-loading');
    $('#btnBookmarkJobPosting').prop('disabled', true);

    var jpID = window.location.hash.replace('#','');

    $.ajax({
        type: 'POST',
        url: '../PHPFiles/Applicant/JobSearch/bookmarkjobposting.php',
        datatype: 'html',
        data: {
            JobPostingID: jpID
        },
        success: function(response){
            if(response == '0'){
                swal({
                    title: 'Job Posting Bookmarked Successfully!',
                    text: "The job posting has been saved and bookmarked. You can get back to it through your profile.",
                    icon: 'success',
                    buttons : {
                        confirm: {
                            text : 'Okay',
                            className : 'btn btn-success'
                        }
                    }
                }).then(function(){
                    $('#btnBookmarkJobPosting').removeClass('is-loading');
                    $('#btnBookmarkJobPosting').prop('disabled', false);
                });
            }
            else if(response == '1'){
                swal({
                    title: 'Failed Retrieve Save Job Posting!',
                    text: "Something went wrong while saving job posting. Data handling failed, please try again.",
                    icon: 'error',
                    buttons : {
                        confirm: {
                            text : 'Okay',
                            className : 'btn btn-success'
                        }
                    }
                }).then(function(){
                    $('#btnBookmarkJobPosting').removeClass('is-loading');
                    $('#btnBookmarkJobPosting').prop('disabled', false);
                });
            }
            else{
                swal({
                    title: 'Failed Retrieve Save Job Posting!',
                    text: "Something went wrong while saving job posting. Please try again.",
                    icon: 'error',
                    buttons : {
                        confirm: {
                            text : 'Okay',
                            className : 'btn btn-success'
                        }
                    }
                }).then(function(){
                    $('#btnBookmarkJobPosting').removeClass('is-loading');
                    $('#btnBookmarkJobPosting').prop('disabled', false);
                });
            }
        },
        error: function(){
            swal({
                title: 'Failed to Connect to Server!',
                text: "Something went wrong while trying to connect to the server. Please try again later.",
                icon: 'error',
                buttons : {
                    confirm: {
                        text : 'Okay',
                        className : 'btn btn-success'
                    }
                }
            }).then(function(){
                $('#btnBookmarkJobPosting').removeClass('is-loading');
                $('#btnBookmarkJobPosting').prop('disabled', false);
            });
        }
    });
}

function ReportJobPosting(){

}

function fillJobPostingList(){
    $.ajax({
        type: 'GET',
        url: '../PHPFiles/Applicant/JobSearch/jobpostinglistget.php',
        datatype: 'html',
        success: function(response){
            if(response == '1'){
                $.notify({
                    // options
                    icon: 'flaticon-error',
                    title: 'Failed to Retrieve Job Posting List!',
                    message: 'Something went wrong while retrieving job postings. Data handling failed, please try again later.'
                },{
                    // settings
                    type: 'danger'
                });
            }
            else if(response == '2'){
                $.notify({
                    // options
                    icon: 'flaticon-error',
                    title: 'Failed to Retrieve Job Posting List!',
                    message: 'Something went wrong while retrieving job postings. Please try again later.'
                },{
                    // settings
                    type: 'danger'
                });
            }
            else if(response == '3'){
                $.notify({
                    // options
                    icon: 'flaticon-exclamation',
                    title: 'No Job Posting Found!',
                    message: 'Currently, there are no posted job hiring. Please try and check again later.'
                },{
                    // settings
                    type: 'info'
                });
            }
            else{
                $('#divJobPostList').html(response);
            }
        },
        error: function(){
            $.notify({
                // options
                icon: 'flaticon-error',
                title: 'Failed to Connect to Server!',
                message: 'Something went wrong while connecting to server. Please try again later.'
            },{
                // settings
                type: 'danger'
            });
        }
    });
}

function searchJobPosting(){

    $('#btnSearchJobPosting').addClass('is-loading');
    $('#btnSearchJobPosting').prop('disabled', true);
    $('#btnSearchFilterJobPosting').addClass('is-Loading');
    $('#btnSearchFilterJobPosting').prop('disabled', true);

    var txtJobTitle = $('#txtSearchJobTitle').val();
    var txtLocation = $('#txtSearchLocation').val();

    if(txtJobTitle.length > 0 || txtLocation.length > 0){
        $.ajax({
            type: 'POST',
            url: '../PHPFiles/Applicant/JobSearch/jobpostingsearch.php',
            datatype: 'html',
            data: {
                JobTitle: txtJobTitle,
                Location: txtLocation
            },
            success: function(response){
                if(response == '1'){
                    swal({
                        title: 'Failed to Search Job Posting!',
                        text: "Something went wrong while trying to search job posting. Data handling failed, please try again.",
                        icon: 'error',
                        buttons : {
                            confirm: {
                                text : 'Okay',
                                className : 'btn btn-success'
                            }
                        }
                    }).then(function(){
                        $('#btnSearchJobPosting').removeClass('is-loading');
                        $('#btnSearchJobPosting').prop('disabled', false);
                        $('#btnSearchFilterJobPosting').removeClass('is-Loading');
                        $('#btnSearchFilterJobPosting').prop('disabled', false);
                    });
                }
                else if(response == '2'){
                    swal({
                        title: 'Failed to Search Job Posting!',
                        text: "Something went wrong while trying to search job posting. Please try again later.",
                        icon: 'error',
                        buttons : {
                            confirm: {
                                text : 'Okay',
                                className : 'btn btn-success'
                            }
                        }
                    }).then(function(){
                        $('#btnSearchJobPosting').removeClass('is-loading');
                        $('#btnSearchJobPosting').prop('disabled', false);
                        $('#btnSearchFilterJobPosting').removeClass('is-Loading');
                        $('#btnSearchFilterJobPosting').prop('disabled', false);
                    });
                }
                else if(response == '3'){
                    swal({
                        title: 'No Job Posting Found!',
                        text: "There is no job posting that contains what you tried to search.",
                        icon: 'info',
                        buttons : {
                            confirm: {
                                text : 'Okay',
                                className : 'btn btn-success'
                            }
                        }
                    }).then(function(){
                        $('#btnSearchJobPosting').removeClass('is-loading');
                        $('#btnSearchJobPosting').prop('disabled', false);
                        $('#btnSearchFilterJobPosting').removeClass('is-Loading');
                        $('#btnSearchFilterJobPosting').prop('disabled', false);
                    });
                }
                else{
                    $('#divJobPostList').html(response);
                }
            },
            error: function(){
                swal({
                    title: 'Failed to Connect to Server!',
                    text: "Something went wrong while trying to connect to the server. Please try again later.",
                    icon: 'error',
                    buttons : {
                        confirm: {
                            text : 'Okay',
                            className : 'btn btn-success'
                        }
                    }
                }).then(function(){
                    $('#btnSearchJobPosting').removeClass('is-loading');
                    $('#btnSearchJobPosting').prop('disabled', false);
                    $('#btnSearchFilterJobPosting').removeClass('is-Loading');
                    $('#btnSearchFilterJobPosting').prop('disabled', false);
                });
            }
        });
    }
}

var txtSearchJobTitle = $('#txtSearchJobTitle');
txtSearchJobTitle.on('keypress', function(event){
    if(event.key === "Enter"){
        searchJobPosting();
    }
});

var txtSearchLocation = $('#txtSearchLocation');
txtSearchLocation.on('keypress', function(event){
    if(event.key === "Enter"){
        searchJobPosting();
    }
});