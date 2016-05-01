  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="{{ URL::asset('ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') }}"></script>
      <script src="{{ URL::asset('//code.jquery.com/ui/1.11.4/jquery-ui.js') }}"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

        <script>

            $('#signup').submit(function(e){
//                $(this).parent('form').parent('.form-group').parent('form').submit();
//                $(this).val('SENDING');
//                $(this).prop('disabled', true);

                $(this).children('.form-group').children('input[type=submit]').val('SENDING');
                $(this).children('.form-group').children('input[type=submit]').attr('disabled','disabled');

//                e.preventDefault();
//                return false;

            })

        </script>