program reverse_array;

const
  _LEN = 10;

var
  i, z, j, tmp: integer;
  array_list: array[1.._LEN] of integer = (0, 2, 4, 6, 8, 10, 12, 14, 16, 18);

begin

  i:= 0;
  z:= _LEN;

  while (i < z) do
  begin
    tmp := array_list[i];
    array_list[i] := array_list[z];
    array_list[z] := tmp;

    Inc(i);
    dec(z);
  end;

  for j := 0 to length(array_list) - 1 do
     writeln(' ', array_list[j], ' ');

  readln;
end.
