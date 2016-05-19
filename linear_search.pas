program linear_search;
const
  _LEN = 20;

var
  my_array: array [1.._LEN] of integer  = (3, 1, 4, 7, 10,
                                        20, 17, 19, 15, 16,
                                        18, 2, 5, 6, 8,
                                        9, 11, 13, 12, 14);

  function my_linear_search(key: integer; var array_list: array of integer): integer;
  var
    i, ilast: integer;
  begin
    my_linear_search := -1;

    for i := 0 to length(array_list) -1  do
    begin
      if array_list[i] = key then
      begin
        my_linear_search := i;
        break;
      end;
    end;
  end;

begin
  writeln('O �ndice do n�mero 14 �: ', my_linear_search(14, my_array));
  readln;
end.
