export default {
  content: [ './resources/js/**/*.vue' ],
  theme : {
    extend : {
      backgroundColor : {
          'primary-white' : '#FCFCFF',
          'primary-black' : '#2D3955'
      },
      textColor : {
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
    }
  },
  plugins : [],
}
