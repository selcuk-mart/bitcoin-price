class DatePicker{
    static config(){
        let date = new Date();
        let maxDate = new Date(date.getFullYear(), date.getMonth(), date.getDate());

        $( "#start-date" ).datepicker({
            dateFormat: 'yy-mm-dd',
            maxDate:maxDate
        });
        $( "#finish-date" ).datepicker({
            dateFormat: 'yy-mm-dd',
            maxDate:maxDate
        });
    }
}
