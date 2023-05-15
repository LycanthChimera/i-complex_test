let arrayLength = Math.floor((Math.random() * 100) + 1);
const players = new Array(arrayLength);
for (let i = 0; i < arrayLength; i++)
{
    players[i] = Math.round(Math.random());
}
let teamA = 0;
let teamB = 1;
//const players = [0,0,0,1,0,0,1,1,1,1,1,1,1,1];
let str = players.join(' ');
let countA = '';
let countB = '';
console.log(str);
for (let i = 0; i < players.length; i++)
{
    if(players[i] === teamA)
    {
        countA++;
        if (countA >= 7)
        {
            break;
        }
    }
    else
    {
        countA = 0;
    }
    if(players[i] === teamB)
    {
        countB++;
        if (countB >= 7)
        {
            break;
        }
    }
    else
    {
        countB = 0;
    }
}
if (countA >= 7 || countB >= 7)
{
    console.log('YES')
}
else
{
    console.log('NO')
}


