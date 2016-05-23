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
    i, ilast, arrayValue: integer;
  begin
    my_linear_search := -1;
    arrayValue := 0;

    {for i := 0 to length(array_list) -1  do
    begin
      if array_list[i] = key then
      begin
        my_linear_search := i;
        break;
      end;
    end;}

    i := 0;
    while (key <> array_list[i]) do
    begin
      arrayValue := i + 1;
      inc(i);

      writeln('Indice do Array: ', i ,' | Valor: ', array_list[i]);
    end;

    if arrayValue <> 0 then
      my_linear_search := arrayValue;
  end;

begin
  writeln('O índice do número 14 é: ', my_linear_search(14, my_array));
  readln;
end.
