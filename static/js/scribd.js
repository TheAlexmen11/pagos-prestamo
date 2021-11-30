xfechas = ["27/12/2021","27/01/2022","27/01/2022","25/02/2022","27/03/2022","27/04/2022","27/05/2022","27/06/2022","27/07/2022","27/08/2022","27/09/2022","27/10/2022","27/11/2022","27/12/2022","27/01/2023","25/02/2023","27/03/2023","27/04/2023","27/05/2023"];
xpagos= [1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];

let xtable="";

let title=`<tr class="title">
            <td>numero</td>
            <td>fecha</td>
            <td>plazo</td>
            <td>Capital</td>
            <td>Total a Pagar</td>
            </tr>`;

for (let i = 0; i < xfechas.length; i++) {
    let xdata = `
    <tr class=''>                
        <td>Nº ${i}</td>
        <td>${xfechas[i]}</td>
        <td>fecha</td>
        <td>fecha</td>
        <td>333.00</td>
</tr>`; 
    xtable+=xdata;
}

document.getElementById('data').innerHTML = title+xtable;