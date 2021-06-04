<script>
/*ajax function for pagination*/
    $(document).on('click', '.pagination a',function(event)
    { 
        event.preventDefault();
        $('.pagination li').removeClass('active');
        $(this).parent('li').addClass('active');
        var page = $(this).attr('href').split('page=')[1];

        $.ajax({
            'url': "{{url('/product_pagination_data')}}",
            'type': 'GET',
            'headers': {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
            data:{'page':page},
            success:function(data){
                $('.load-data').html(data);
            }
        });
    });
    </script>
