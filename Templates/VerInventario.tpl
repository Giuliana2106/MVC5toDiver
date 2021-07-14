{include file="Templates/Cabeceras/Header.tpl"}

<div class="row">
    <div class="input-field col s12">
        <h1 class="center align">Ver Inventario</h1>
    </div>
</div>

<div class="row">
    {include file='Navs/BarraLateral.tpl'}
    <div class="col s8">
        <table>
            <thead>
                <tr>
                    <th>Nombre del Producto</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                </tr>          
            </thead>
            <tbody>
            {foreach from=$inventario item=$invent }
                <tr>
                    <td>
                        {$invent['Nombre']}
                    </td>
                    <td>
                        {$invent['Descripción']}
                    </td>
                    <td>
                        {$invent['Cantidad']}
                    </td>
                    <td>
                        {$invent['Precio']}
                    </td>
                </tr>
            {/foreach}
            </tbody>
        </table>
    </div>
</div>

{include file="Templates/Cabeceras/Footer.tpl"}