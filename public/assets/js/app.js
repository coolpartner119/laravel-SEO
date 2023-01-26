function pagination(start, search_data, page_num_tagname,  table_content_tagname){
    var html="";
    var end = start + 15;
    if(end > search_data.length){
        end = search_data.length;
    }
    for(var i=start; i<end; i++){
        if($("#reg_no").val() != ""){
            html += "<tr id=" + search_data[i].id + "><td class='h1'>"+ (i+1) +"</td><td class='h2'>" + search_data[i].app_number +"</td><td class='h3'>" + search_data[i].com_reg + "</td>"
            + "<td class='h4'>" + search_data[i].name + "</td>"
              + "<td class='h5'>" + search_data[i].doc_number + "</td>"
            + "<td class='h6'>" + search_data[i].status + "</td></tr>";
        }else{
            html += "<tr id=" + search_data[i].id + "><td class='h1'>"+ (i+1) +"</td><td class='h2'>" + search_data[i].app_number +"</td><td class='h3'>" + search_data[i].id_card + "/" +search_data[i].com_reg + "</td>"
            + "<td class='h4'>" + search_data[i].name + "</td>"
              + "<td class='h5'>" + search_data[i].doc_number + "</td>"
            + "<td class='h6'>" + search_data[i].status + "</td></tr>";
        }
    }
    $('#' + table_content_tagname).empty();
    $('#' + table_content_tagname).append(html);
    $('.' + page_num_tagname).val(Number(start/15)+1);
}

$(document).ready(function(){
  var valid = true;
    $('.sidebar-in2').on('click', function(){
      window.location.replace('/');
      console.log('lo');
    });

    $(".empty").click(function(){
        $('.search_id').val('');
        $('.search_reg').val('');
        $('.search_app').val('');   
        $('.search_id').css('background-color','white');
        $('.search_reg').css('background-color','white');
        $('.search_app').css('background-color','white'); 
        $('#table_content').empty();
        var html = "No data!"
        $('#table_content').empty();
        
    });

    $('.search').on('click', function(){
        valid=true;
        $('#table_content').empty();
        $(".custom-input-name").each(function() {
            $(this).removeClass("errFld");
        });
        var applno  = $("#app_no").val();
        var rocno   = $("#reg_no").val();
        if (applno == '' && rocno == ''){
            valid = false;
        }
        if( !valid )
        {
            alert("Please fill in the following information.");
            $(".custom-input-name").each(function() {
                $(this).removeClass("errFld");
            });
            $("#app_no").addClass("errFld");
            $("#reg_no").addClass("errFld");
            $("#id_no").addClass("errFld");
            console.log(valid+';;!');

        }else{
          valid = false;
          var idcard = $('.search_id').val();
          var reg_comp = $('.search_reg').val();
          var app_number = $('.search_app').val(); 
            $.ajax({
                  url: "/my/myimms/PRAStatus/search",
                  method: 'POST',
                  data: {
                      idcard:idcard,
                      reg_comp:reg_comp,
                      app_number: app_number 
                  },
                  dataType: 'JSON',
                  success:function(response)
                  {
                    $(".required").each(function() {
                        $(this).removeClass("errFld");
                    });
                    var html = "";
                    if(response.data == ""){
                      html="<tr><td colspan='6' class='result'>Nothing to show any data, search more...</td></tr>"
                      $('#table_content').empty();
                      $('#table_content').append(html);
                      console.log(valid+';;nor');
                    }else{
                      var search_data = response.data; 
                      var max_page = Math.floor(search_data.length/15)+1;
                      if(max_page>1){
                        $('.search_footer').css('display', 'flex');
                      }
                      $('.total_page').html("from"+" "+max_page);
                      $('.page_num').val(1);
                        var start = 0;
                        var current_page = 1;
                        $('.total_num').html('Total Record:'+search_data.length);
                        
                        $('.previous').attr('disabled', true);
                        $('.first').attr('disabled', true);
                        $('.next').removeAttr("disabled");
                        $('.last').removeAttr("disabled");
                        
                        pagination(0, search_data, "page_num", "table_content");
                        $('.first').on('click', function(){
                            $('.previous').attr('disabled', true);
                            $('.first').attr('disabled', true);
                            $('.next').removeAttr("disabled");
                            $('.last').removeAttr("disabled");
                            pagination(0, search_data, "page_num", "table_content");
                        });

                        $('.previous').on('click', function(){
                            $('.next').removeAttr("disabled");
                            $('.last').removeAttr("disabled");
                            current_page = $('.page_num').val();
                            if(current_page == 1){
                              $('.previous').attr('disabled', true);
                              $('.first').attr('disabled', true);
                            }else{
                                start = current_page*15-30;
                                pagination(start, search_data, "page_num", "table_content");
                                if(current_page == 2){
                                    $('.previous').attr('disabled', true);
                                    $('.first').attr('disabled', true);
                                }
                            }
                        });

                        $('.next').on('click', function(){
                            $('.first').removeAttr("disabled");
                            $('.previous').removeAttr("disabled");
                            current_page = $('.page_num').val();
                            if(current_page == max_page){
                                $('.last').attr('disabled', true);
                                $('.next').attr('disabled', true);
                            }else{
                                start = current_page*15;
                                pagination(start, search_data, "page_num", "table_content");
                                if(current_page == max_page-1){
                                    $('.last').attr('disabled', true);
                                    $('.next').attr('disabled', true);
                                }
                            }
                        });

                        $('.last').on('click', function(){
                          $('.last').attr('disabled', true);
                          $('.next').attr('disabled', true);
                          $('.first').removeAttr("disabled");
                          $('.previous').removeAttr("disabled");
                          start = max_page*15-15;
                          pagination(start, search_data, "page_num", "table_content");
                        });

                        $('.goto').on('click', function(){
                          current_page = $('.page_num').val();
                          start = current_page*15-15;
                          pagination(start, search_data, "page_num", "table_content");
                        });

                    }
                    
                  },
                  error: function(err) {
                      console.log("error:" + err);
                  }
              });
        }
  }); 

});
 $( window ).on( "load", function() {
    const current = new Date();
    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    const dayofweek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    document.getElementById("date_display").innerHTML =  dayofweek[current.getDay()]+"  " +months[current.getMonth()] + "  "+ current.getDate() +"  "+ current.getFullYear();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});