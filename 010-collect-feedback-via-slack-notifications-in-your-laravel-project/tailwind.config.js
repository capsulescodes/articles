export default {
  content : [ './resources/views/**/*.blade.php', './resources/js/**/*.vue' ],
  theme : {
    extend : {
      backgroundColor : {
        'primary-white' : '#FCFCFF',
        'primary-red' :  '#CC2964',
        'primary-blue' : '#33E5E1',
        'primary-black' : '#2D3955',
      },
      textColor : {
        'primary-white' : '#FCFCFF',
        'primary-red' :  '#CC2964',
        'primary-blue' : '#347999',
        'primary-black' : '#2D3955'
      },
      gradientColorStops : {
        'primary-red-300' : '#FF4086',
        'primary-blue-300' : '#33E5E1',
      },
      keyframes : {
        gradient : {
          '0%' : { backgroundPosition : '0% 0%' },
          '50%' : {  backgroundPosition : '50% 0%' },
          '100%' : { backgroundPosition : '100% 0%' }
        },
      }
    },
  },
  plugins : [],
};
