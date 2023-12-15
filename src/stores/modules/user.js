import tasks from './tasks'
export  const nameSpace = true
export const user = {
    data:{
      userName:'miles94',
    },
    token: sessionStorage.getItem('TOKEN'),
    otpConfirmStatus: '',
    registerStatus: '',
    tasks
}