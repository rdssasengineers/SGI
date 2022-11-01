<!-- @format -->

`<!-- @format -->`

# Comandos de GIT Básicos

## Entendiendo cómo funciona GIT

GIT es el SCV (sistema de control de versiones) de código abierto más utilizado que te permite rastrear los cambios realizados en los archivos. Las empresas y los programadores suelen utilizar el GIT para colaborar en el desarrollo de software y aplicaciones.

Un proyecto GIT consta de tres secciones principales: **el directorio de trabajo** , **el área de preparación** y **el directorio git** .

El directorio de trabajo es donde se agregan, borran y editan los archivos. Luego, los cambios son preparados (indexados) en el área de preparación. Después de que confirmes tus cambios, la instantánea de los cambios se guardará en el directorio git.

### Cómo instalar GIT en Windows

En Windows, sólo tienes que descargar el instalador y ejecutarlo. Sigue estos sencillos pasos para hacerlo:

1. [Descarga](https://git-scm.com/downloads) el instalador de GIT para Windows.
2. Una vez que hayas descargado el instalador, haz doble clic sobre el ejecutable para que comience el proceso de instalación y sigue las instrucciones que te aparecerán en pantalla. Al igual que cualquier otro programa, tendrás que dar **“Next”** (siguiente) en varias ocasiones hasta que aparezca la opción **“Finish”** (terminar) para completar la instalación.

   > Git para Windows proporciona una emulación de BASH que se usa para ejecutar Git desde la línea de comandos.

3. Ahora tienes que abrir **Git BASH** y escribir los siguientes comandos en la terminal:

   ```
   git --version
   ```

   **Verificamos que git se instaló correctamente**, nos debería salir la versión que tenemos instalada de **git** en nuestro ordenador.

4. Configuración de git:

   ```
   git config --global user.name "Tu nombre"
   git config --global user.email tuemail@email.com
   ```

   Ya con esto tenemos configurado git.

5. Cofiguración del edictor de texto, para casos practicos se configurar [VS Code](https://code.visualstudio.com/download); usted puede configurar el editor de texto de su preferencia.

   ```
   git config --global core.editor "code --wait"
   /**
    * Nota:->
    * La opción --wait es para que la terminal se quede esperando hasta que cerremos el editor de texto.
    * Para ver el archivo de configuración global debemos escribir el siguiente comando:-> git config --global -e
    */
   ```
