// Inicializar Supabase
import { createClient } from '@supabase/supabase-js'
const supabaseUrl = 'https://pzqtivjmpgzzinlnenis.supabase.co'; // Reemplaza con tu URL de proyecto Supabase
const supabaseKey = 'process.env.SUPABASE_KEY'; // Reemplaza con tu API key
const supabase = supabase.createClient(supabaseUrl, supabaseKey);

// Capturar el formulario
const loginForm = document.getElementById('login-form');

// Manejar el evento de envío del formulario
loginForm.addEventListener('submit', async (e) => {
  e.preventDefault();

  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;

  // Realizar una consulta a la tabla "usuarios"
  const { data, error } = await supabase
    .from('usuarios')
    .select('*')
    .eq('email', email)
    .single();  // Devuelve un único resultado

  const messageElement = document.getElementById('message');

  if (error) {
    messageElement.textContent = `Error buscando el usuario: ${error.message}`;
  } else if (!data) {
    messageElement.textContent = 'Usuario no encontrado';
  } else {
    // Verificar si la contraseña coincide (en este caso, está en texto plano, pero debería estar cifrada)
    if (data.password === password) {
      messageElement.textContent = 'Login exitoso';
      // Aquí puedes redirigir o hacer otras acciones después del login
    } else {
      messageElement.textContent = 'Contraseña incorrecta';
    }
  }
});
