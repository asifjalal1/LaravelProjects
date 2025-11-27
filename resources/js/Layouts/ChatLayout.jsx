import { usePage } from "@inertiajs/react";

export default function ChatLayout({ children }) {
    const page = usePage();
    const conversations = page.props.conversations;
    const selectedConversation = page.props.selectedConversation;


    console.log('conversations', conversations);
    console.log('selectedConversation', selectedConversation);

    return (
        <>
            Chat Layout
            <div className="">
                {children}
            </div>
        </>
    );
}