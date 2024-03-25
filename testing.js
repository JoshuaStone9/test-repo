
const session = await authentication.getSession('microtronics-id', ['openid'], { createIfNone: true });
if (session) {
	// use access token
	doSomething(session.accessToken);
}	