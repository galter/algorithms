program binary_search;

const
  _LEN = 10;

var
  array_list: array[1.._LEN] of Integer = (0, 2, 4, 6, 8, 10, 12, 14, 16, 18);
  Num: Integer;

  function bin_search(key, n: Integer; arr: array of Integer): Integer;
  var
    vInit, vFinal, vMid: Integer;
  begin
    bin_search := -1;

    vInit := arr[0];
    vFinal := n - 1;

    while (vInit <= vFinal) do
    begin
      vMid := (vInit + vFinal) div 2;

      if (Key = arr[vMid]) then
        bin_search := vMid;

      if (key > arr[vMid]) then
        vInit := vMid + 1
      else
        vFinal := vMid - 1;
    end;
  end;

begin
  writeln('Vetor (0, 2, 4, 6, 8, 10, 12, 14, 16, 18)');
  writeln('Digite um Número');
  readln(Num);
  writeln('O Índice do número ', Num, ' é:', bin_search(Num, _LEN, array_list));
  readln;
end.
