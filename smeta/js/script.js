/**
 * Created by user on 26.09.2016.
 */
$(document).ready(function () {
    reCount();
    $('#save_cat').click(function () {
        var x,name1,prio1,id1;
        $('.cat_id').each(function () {
            id1=$(this).html();
            name1=$(this).parent().siblings('.cont2').find('.cat_name').val();
            prio1=$(this).parent().siblings('.cont1').find('.cat_prio').val();
            $.ajax({
                url: "edit_cat_proc.php",
                type: 'post',
                data: {
                    name: name1,
                    prio: prio1,
                    id: id1
                },
                success: function () {
                }
            });
        });
    });
    $('#save_edit').click(function () {
        var x,name2,prio2,id2,cost2,desc2;
        $('.edit_id').each(function () {
            id2=$(this).html();
            name2=$(this).parent().siblings('.cont2').find('.name').val();
            cost2=$(this).parent().siblings('.cont3').find('.cost').val();
            desc2=$(this).parent().siblings('.cont2').find('.descr').val();
            prio2=$(this).parent().siblings('.cont1').find('.prio').val();
            $.ajax({
                url: "edit_proc.php",
                type: 'post',
                data: {
                    name: name2,
                    prio: prio2,
                    cost: cost2,
                    desc: desc2,
                    id: id2
                },
                success: function () {
                }
            });
        });
    });
    $('.save_template1').click(function () {

        $('.temp_block').css('display','block');
        $(this).css('display','none');
    });
    $('.radio_temp_new').click(function () {
        $('.edit_temp').css('display','none');
        $('.new_temp').css('display','block');
    });
    $('.radio_temp_edit').click(function () {
        $('.new_temp').css('display','none');
        $('.edit_temp').css('display','block');
    });

    $('.save_new_temp').click(function () {
        var x = document.getElementById("vision_temp1").checked;
        var vision=0;
        if (x){
            vision=1;
        }else {
            vision=0;
        }
        var name=$('.name_temp').val();
        var s=[];
        $('.smeta_check:checked').each(function () {
            s.push($(this).val());
        });
        $.ajax({
            url: "add_to_template.php",
            type: 'post',
            data: {
                name: name,
                s: s,
                vision:vision
            },
            success: function () {
                alert('Шаблон '+name+' успешно сохранён!');
            }
        });

    });
    $('.save_edit_temp').click(function () {
        var id=$('.old_template').val();
        var s1=[];
        var name=$('.old_template').html();
        $('.smeta_check:checked').each(function () {
            s1.push($(this).val());
        });
        $.ajax({
            url: "edit_template.php",
            type: 'post',
            data: {
                id: id,
                s: s1
            },
            success: function () {
                alert('Шаблон'+id+'успешно сохранён!');
            }
        });

    });
    $('.temp_el').click(function () {
        var id=$(this).attr('content');
        var res=[];
        $.ajax({
            url: "get_template.php",
            type: 'post',
            data: {
                id: id
            },
            success: function (res) {
                var result = jQuery.parseJSON(res);
                $('.smeta_check').prop('checked', false);
                for(var i=0;i<result.length;i++){
                    $('#smeta_check_'+result[i]).prop('checked', true);
                }
                reCount();
            }
        });
    });
    $('.smeta_check').change(function () {
        reCount();
    });
    $('.print_smeta').click(function () {
        var ids=[];
        $('.smeta_check:checked').each(function () {
            ids.push($(this).val());
        });
        $.ajax({
            url: "create_xls.php",
            type: 'post',
            data: {
                ids: ids
            },
            success: function (res) {
                $('.link_smeta').html('<a href="'+res+'">Скачать Excel-файл</a>');
            }
        });
    });
});
function reCount() {
    var fullprice=0;
    $('.smeta_check:checked').each(function () {
        fullprice+=parseInt($(this).parent().siblings('.cont3').find('.cost').html());
    });
    $('.full_price').html(fullprice);
}