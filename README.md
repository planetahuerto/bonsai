# PROYECTO BONSAI
Realizar el modelado de los distintos bonsais que tenemos y sus
necesidades actuales.
Dejamos a tu criterio la organización del código
Modelar la siguiente estructura.
Disponemos de bonsáis que tienen necesidades comunes y alguna específica según el tipo.

Los distintos tipos de bonsais que tenemos son:
1. Manzano
2. Olmo
3. Ficus
4. Olivo

## Necesidades comunes a todos los bonsáis:
   * Riego
   * Abono
   * Transplante
   
### Necesidades individuales
   * Pulverizar: Olmo
   
   Funcionalidad según las necesidades del bonsai

### Caso de uso: Riego. 
Calculará la frecuencia de riego que necesita el bonsai, atendiendo las siguientes reglas de negocio:
   * Si estamos en Julio o Agosto la frecuencia de riego será siempre “muy
   frecuente”.
   * En otro caso
     * Manzano: ”frecuente”
     * Olmo : “muy frecuente”
     * Ficus : “poco frecuente”
     * Olivo: “poco frecuente”
### Caso de uso: Abono. 
   Indicará si se llevará a cabo el abonado de los bonsáis. Éstos se   abonan en primavera y otoño, atendiendo si se ha abonado recientemente (desde hace
   menos de 30 días).

### Caso de uso: Transplante. 
Todos los bonsáis se trasplantan en Marzo.

### Caso de uso: Pulverizar. 
Este caso solo tendrá en cuenta si los bonsais de tipo olmo tienen que ser pulverizados con la misma frecuencia que el riego.
   
## Realizar pruebas unitarias
   Crear unas pruebas unitarias para probar funcionalidades sobre los casos de uso. 
   
## Para nota
   ¿Cómo modificarías el modelado / planteamiento para que los cálculos que tienen en cuenta
   los meses del año pudieran depender del hemisferio en el que nos encontramos?
