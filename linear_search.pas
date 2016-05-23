program linear_search;
const
  _LEN = 20;

var
  my_array: array [1.._LEN] of integer  = (3, 1, 4, 7, 10,
                                        20, 17, 19, 15, 16,
                                        18, 2, 5, 6, 8,
                                        9, 11, 13, 12, 14);

  function my_linear_search(key, n: integer; var array_list: array of integer): integer;
  var
    i, ilast: integer;
  begin
    dec(n);

    ilast := array_list[n];

    array_list[n] := key;

    i := 0;
    while (array_list[i] <> key) do
      inc(i);

    array_list[n] := ilast;

    if (array_list[i] = key) then
      my_linear_search := i
    else
      my_linear_search := -1;
  end;

begin
  writeln('O índice é: ', my_linear_search(19, 20, my_array));
  readln;
end.
